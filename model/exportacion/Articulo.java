/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion;

/**
 * @author ytorregl
 *
 */
public class Articulo {
	
	private String numero;
	private String codigoArancelario;
	private String especificaciones;
	private String tipoUso;
	private String pais;
	private String condicionArticulo;
	private String numeroDocumento;
	private String numeroLicencia;
	private double cantidadUnidades;
	private String unidadMedida;
	private double numeroBultos;
	private double pesoBruto;
	private double pesoNeto;
	private double cantidadCargaLiquida;
	private double valorUnitario;
	private double valorFob;
	private double montoFlete;
	private double valorSeguro;
	private double valorCifn;
	/**
	 * 
	 */
	public Articulo() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numero
	 * @param codigoArancelario
	 * @param especificaciones
	 * @param tipoUso
	 * @param pais
	 * @param condicionArticulo
	 * @param numeroDocumento
	 * @param numeroLicencia
	 * @param cantidadUnidades
	 * @param unidadMedida
	 * @param numeroBultos
	 * @param pesoBruto
	 * @param pesoNeto
	 * @param cantidadCargaLiquida
	 * @param valorUnitario
	 * @param valorFob
	 * @param montoFlete
	 * @param valorSeguro
	 * @param valorCifn
	 */
	public Articulo(String numero, String codigoArancelario, String especificaciones, String tipoUso, String pais,
			String condicionArticulo, String numeroDocumento, String numeroLicencia, double cantidadUnidades,
			String unidadMedida, double numeroBultos, double pesoBruto, double pesoNeto, double cantidadCargaLiquida,
			double valorUnitario, double valorFob, double montoFlete, double valorSeguro, double valorCifn) {
		super();
		this.numero = numero;
		this.codigoArancelario = codigoArancelario;
		this.especificaciones = especificaciones;
		this.tipoUso = tipoUso;
		this.pais = pais;
		this.condicionArticulo = condicionArticulo;
		this.numeroDocumento = numeroDocumento;
		this.numeroLicencia = numeroLicencia;
		this.cantidadUnidades = cantidadUnidades;
		this.unidadMedida = unidadMedida;
		this.numeroBultos = numeroBultos;
		this.pesoBruto = pesoBruto;
		this.pesoNeto = pesoNeto;
		this.cantidadCargaLiquida = cantidadCargaLiquida;
		this.valorUnitario = valorUnitario;
		this.valorFob = valorFob;
		this.montoFlete = montoFlete;
		this.valorSeguro = valorSeguro;
		this.valorCifn = valorCifn;
	}
	/**
	 * @return the numero
	 */
	public String getNumero() {
		return numero;
	}
	/**
	 * @param numero the numero to set
	 */
	public void setNumero(String numero) {
		this.numero = numero;
	}
	/**
	 * @return the codigoArancelario
	 */
	public String getCodigoArancelario() {
		return codigoArancelario;
	}
	/**
	 * @param codigoArancelario the codigoArancelario to set
	 */
	public void setCodigoArancelario(String codigoArancelario) {
		this.codigoArancelario = codigoArancelario;
	}
	/**
	 * @return the especificaciones
	 */
	public String getEspecificaciones() {
		return especificaciones;
	}
	/**
	 * @param especificaciones the especificaciones to set
	 */
	public void setEspecificaciones(String especificaciones) {
		this.especificaciones = especificaciones;
	}
	/**
	 * @return the tipoUso
	 */
	public String getTipoUso() {
		return tipoUso;
	}
	/**
	 * @param tipoUso the tipoUso to set
	 */
	public void setTipoUso(String tipoUso) {
		this.tipoUso = tipoUso;
	}
	/**
	 * @return the pais
	 */
	public String getPais() {
		return pais;
	}
	/**
	 * @param pais the pais to set
	 */
	public void setPais(String pais) {
		this.pais = pais;
	}
	/**
	 * @return the condicionArticulo
	 */
	public String getCondicionArticulo() {
		return condicionArticulo;
	}
	/**
	 * @param condicionArticulo the condicionArticulo to set
	 */
	public void setCondicionArticulo(String condicionArticulo) {
		this.condicionArticulo = condicionArticulo;
	}
	/**
	 * @return the numeroDocumento
	 */
	public String getNumeroDocumento() {
		return numeroDocumento;
	}
	/**
	 * @param numeroDocumento the numeroDocumento to set
	 */
	public void setNumeroDocumento(String numeroDocumento) {
		this.numeroDocumento = numeroDocumento;
	}
	/**
	 * @return the numeroLicencia
	 */
	public String getNumeroLicencia() {
		return numeroLicencia;
	}
	/**
	 * @param numeroLicencia the numeroLicencia to set
	 */
	public void setNumeroLicencia(String numeroLicencia) {
		this.numeroLicencia = numeroLicencia;
	}
	/**
	 * @return the cantidadUnidades
	 */
	public double getCantidadUnidades() {
		return cantidadUnidades;
	}
	/**
	 * @param cantidadUnidades the cantidadUnidades to set
	 */
	public void setCantidadUnidades(double cantidadUnidades) {
		this.cantidadUnidades = cantidadUnidades;
	}
	/**
	 * @return the unidadMedida
	 */
	public String getUnidadMedida() {
		return unidadMedida;
	}
	/**
	 * @param unidadMedida the unidadMedida to set
	 */
	public void setUnidadMedida(String unidadMedida) {
		this.unidadMedida = unidadMedida;
	}
	/**
	 * @return the numeroBultos
	 */
	public double getNumeroBultos() {
		return numeroBultos;
	}
	/**
	 * @param numeroBultos the numeroBultos to set
	 */
	public void setNumeroBultos(double numeroBultos) {
		this.numeroBultos = numeroBultos;
	}
	/**
	 * @return the pesoBruto
	 */
	public double getPesoBruto() {
		return pesoBruto;
	}
	/**
	 * @param pesoBruto the pesoBruto to set
	 */
	public void setPesoBruto(double pesoBruto) {
		this.pesoBruto = pesoBruto;
	}
	/**
	 * @return the pesoNeto
	 */
	public double getPesoNeto() {
		return pesoNeto;
	}
	/**
	 * @param pesoNeto the pesoNeto to set
	 */
	public void setPesoNeto(double pesoNeto) {
		this.pesoNeto = pesoNeto;
	}
	/**
	 * @return the cantidadCargaLiquida
	 */
	public double getCantidadCargaLiquida() {
		return cantidadCargaLiquida;
	}
	/**
	 * @param cantidadCargaLiquida the cantidadCargaLiquida to set
	 */
	public void setCantidadCargaLiquida(double cantidadCargaLiquida) {
		this.cantidadCargaLiquida = cantidadCargaLiquida;
	}
	/**
	 * @return the valorUnitario
	 */
	public double getValorUnitario() {
		return valorUnitario;
	}
	/**
	 * @param valorUnitario the valorUnitario to set
	 */
	public void setValorUnitario(double valorUnitario) {
		this.valorUnitario = valorUnitario;
	}
	/**
	 * @return the valorFob
	 */
	public double getValorFob() {
		return valorFob;
	}
	/**
	 * @param valorFob the valorFob to set
	 */
	public void setValorFob(double valorFob) {
		this.valorFob = valorFob;
	}
	/**
	 * @return the montoFlete
	 */
	public double getMontoFlete() {
		return montoFlete;
	}
	/**
	 * @param montoFlete the montoFlete to set
	 */
	public void setMontoFlete(double montoFlete) {
		this.montoFlete = montoFlete;
	}
	/**
	 * @return the valorSeguro
	 */
	public double getValorSeguro() {
		return valorSeguro;
	}
	/**
	 * @param valorSeguro the valorSeguro to set
	 */
	public void setValorSeguro(double valorSeguro) {
		this.valorSeguro = valorSeguro;
	}
	/**
	 * @return the valorCifn
	 */
	public double getValorCifn() {
		return valorCifn;
	}
	/**
	 * @param valorCifn the valorCifn to set
	 */
	public void setValorCifn(double valorCifn) {
		this.valorCifn = valorCifn;
	}
	
	
	

}
