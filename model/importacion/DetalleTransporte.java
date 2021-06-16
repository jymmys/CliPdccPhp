/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class DetalleTransporte {

	
	private String modoTransporte;
	private String fechaPartida;
	private String paisProcedencia;
	private String aduanaIngreso;
	private String aduanaDestino;
	private String lugarEmbarque;
	private String lugarDesembarque;
	private String fechaArribo;
	private String paisDestino;
	/**
	 * 
	 */
	public DetalleTransporte() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param modoTransporte
	 * @param fechaPartida
	 * @param paisProcedencia
	 * @param aduanaIngreso
	 * @param aduanaDestino
	 * @param lugarEmbarque
	 * @param lugarDesembarque
	 * @param fechaArribo
	 * @param paisDestino
	 */
	public DetalleTransporte(String modoTransporte, String fechaPartida, String paisProcedencia, String aduanaIngreso,
			String aduanaDestino, String lugarEmbarque, String lugarDesembarque, String fechaArribo,
			String paisDestino) {
		super();
		this.modoTransporte = modoTransporte;
		this.fechaPartida = fechaPartida;
		this.paisProcedencia = paisProcedencia;
		this.aduanaIngreso = aduanaIngreso;
		this.aduanaDestino = aduanaDestino;
		this.lugarEmbarque = lugarEmbarque;
		this.lugarDesembarque = lugarDesembarque;
		this.fechaArribo = fechaArribo;
		this.paisDestino = paisDestino;
	}
	/**
	 * @return the modoTransporte
	 */
	public String getModoTransporte() {
		return modoTransporte;
	}
	/**
	 * @param modoTransporte the modoTransporte to set
	 */
	public void setModoTransporte(String modoTransporte) {
		this.modoTransporte = modoTransporte;
	}
	/**
	 * @return the fechaPartida
	 */
	public String getFechaPartida() {
		return fechaPartida;
	}
	/**
	 * @param fechaPartida the fechaPartida to set
	 */
	public void setFechaPartida(String fechaPartida) {
		this.fechaPartida = fechaPartida;
	}
	/**
	 * @return the paisProcedencia
	 */
	public String getPaisProcedencia() {
		return paisProcedencia;
	}
	/**
	 * @param paisProcedencia the paisProcedencia to set
	 */
	public void setPaisProcedencia(String paisProcedencia) {
		this.paisProcedencia = paisProcedencia;
	}
	/**
	 * @return the aduanaIngreso
	 */
	public String getAduanaIngreso() {
		return aduanaIngreso;
	}
	/**
	 * @param aduanaIngreso the aduanaIngreso to set
	 */
	public void setAduanaIngreso(String aduanaIngreso) {
		this.aduanaIngreso = aduanaIngreso;
	}
	/**
	 * @return the aduanaDestino
	 */
	public String getAduanaDestino() {
		return aduanaDestino;
	}
	/**
	 * @param aduanaDestino the aduanaDestino to set
	 */
	public void setAduanaDestino(String aduanaDestino) {
		this.aduanaDestino = aduanaDestino;
	}
	/**
	 * @return the lugarEmbarque
	 */
	public String getLugarEmbarque() {
		return lugarEmbarque;
	}
	/**
	 * @param lugarEmbarque the lugarEmbarque to set
	 */
	public void setLugarEmbarque(String lugarEmbarque) {
		this.lugarEmbarque = lugarEmbarque;
	}
	/**
	 * @return the lugarDesembarque
	 */
	public String getLugarDesembarque() {
		return lugarDesembarque;
	}
	/**
	 * @param lugarDesembarque the lugarDesembarque to set
	 */
	public void setLugarDesembarque(String lugarDesembarque) {
		this.lugarDesembarque = lugarDesembarque;
	}
	/**
	 * @return the fechaArribo
	 */
	public String getFechaArribo() {
		return fechaArribo;
	}
	/**
	 * @param fechaArribo the fechaArribo to set
	 */
	public void setFechaArribo(String fechaArribo) {
		this.fechaArribo = fechaArribo;
	}
	/**
	 * @return the paisDestino
	 */
	public String getPaisDestino() {
		return paisDestino;
	}
	/**
	 * @param paisDestino the paisDestino to set
	 */
	public void setPaisDestino(String paisDestino) {
		this.paisDestino = paisDestino;
	}
	
	

}
