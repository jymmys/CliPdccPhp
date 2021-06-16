/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion;

/**
 * @author ytorregl
 *
 */
public class DetalleCarga {
	
	
	private double pesoBrutoTotal;
	private double valorFobTotal;
	private String acuerdo;
	private double gastoTransporte;
	private double totalValorSeguro;
	private double cantidadTotalBultos;
	private String depositoDestino;
	private String zona;
	/**
	 * 
	 */
	public DetalleCarga() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param pesoBrutoTotal
	 * @param valorFobTotal
	 * @param acuerdo
	 * @param gastoTransporte
	 * @param totalValorSeguro
	 * @param cantidadTotalBultos
	 * @param depositoDestino
	 * @param zona
	 */
	public DetalleCarga(double pesoBrutoTotal, double valorFobTotal, String acuerdo, double gastoTransporte,
			double totalValorSeguro, double cantidadTotalBultos, String depositoDestino, String zona) {
		super();
		this.pesoBrutoTotal = pesoBrutoTotal;
		this.valorFobTotal = valorFobTotal;
		this.acuerdo = acuerdo;
		this.gastoTransporte = gastoTransporte;
		this.totalValorSeguro = totalValorSeguro;
		this.cantidadTotalBultos = cantidadTotalBultos;
		this.depositoDestino = depositoDestino;
		this.zona = zona;
	}
	/**
	 * @return the pesoBrutoTotal
	 */
	public double getPesoBrutoTotal() {
		return pesoBrutoTotal;
	}
	/**
	 * @param pesoBrutoTotal the pesoBrutoTotal to set
	 */
	public void setPesoBrutoTotal(double pesoBrutoTotal) {
		this.pesoBrutoTotal = pesoBrutoTotal;
	}
	/**
	 * @return the valorFobTotal
	 */
	public double getValorFobTotal() {
		return valorFobTotal;
	}
	/**
	 * @param valorFobTotal the valorFobTotal to set
	 */
	public void setValorFobTotal(double valorFobTotal) {
		this.valorFobTotal = valorFobTotal;
	}
	/**
	 * @return the acuerdo
	 */
	public String getAcuerdo() {
		return acuerdo;
	}
	/**
	 * @param acuerdo the acuerdo to set
	 */
	public void setAcuerdo(String acuerdo) {
		this.acuerdo = acuerdo;
	}
	/**
	 * @return the gastoTransporte
	 */
	public double getGastoTransporte() {
		return gastoTransporte;
	}
	/**
	 * @param gastoTransporte the gastoTransporte to set
	 */
	public void setGastoTransporte(double gastoTransporte) {
		this.gastoTransporte = gastoTransporte;
	}
	/**
	 * @return the totalValorSeguro
	 */
	public double getTotalValorSeguro() {
		return totalValorSeguro;
	}
	/**
	 * @param totalValorSeguro the totalValorSeguro to set
	 */
	public void setTotalValorSeguro(double totalValorSeguro) {
		this.totalValorSeguro = totalValorSeguro;
	}
	/**
	 * @return the cantidadTotalBultos
	 */
	public double getCantidadTotalBultos() {
		return cantidadTotalBultos;
	}
	/**
	 * @param cantidadTotalBultos the cantidadTotalBultos to set
	 */
	public void setCantidadTotalBultos(double cantidadTotalBultos) {
		this.cantidadTotalBultos = cantidadTotalBultos;
	}
	/**
	 * @return the depositoDestino
	 */
	public String getDepositoDestino() {
		return depositoDestino;
	}
	/**
	 * @param depositoDestino the depositoDestino to set
	 */
	public void setDepositoDestino(String depositoDestino) {
		this.depositoDestino = depositoDestino;
	}
	/**
	 * @return the zona
	 */
	public String getZona() {
		return zona;
	}
	/**
	 * @param zona the zona to set
	 */
	public void setZona(String zona) {
		this.zona = zona;
	}
	
	
	
	

}
